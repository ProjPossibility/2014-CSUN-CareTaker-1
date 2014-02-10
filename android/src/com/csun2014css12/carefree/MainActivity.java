package com.csun2014css12.carefree;

import java.io.BufferedReader;
import java.io.InputStreamReader;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;

import android.app.Activity;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.Menu;
import android.view.View;
import android.widget.Button;

public class MainActivity extends Activity {
	
	private Intent mServiceIntent;
	public final static String EXTRA_MESSAGE = "com.csun2014css12.carefree.MESSAGE";

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
        Button btn = (Button) findViewById(R.id.get_notifications);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
            	viewNotifications();
            }
        });
	}
	
	protected void viewNotifications() {
		new GetNotifications().execute();
	}
	
	public class GetNotifications extends AsyncTask<Void, Void, String> {
        @Override
        protected String doInBackground(Void... params) {
            try {
                HttpClient httpclient = new DefaultHttpClient();
                HttpGet httpget = new HttpGet("http://carefree.v4.net/carefree/public/api/v1/users/7/generate-notifications");
                HttpResponse response = httpclient.execute(httpget);
                
                BufferedReader reader = new BufferedReader(new InputStreamReader(response.getEntity().getContent(), "iso-8859-1"), 8);
                StringBuilder sb = new StringBuilder();
                
                sb.append(reader.readLine() + "\n");
                String line = "0";
                while ((line = reader.readLine()) != null) {
                    sb.append(line + "\n");
                }
                reader.close();
                String result = sb.toString();

                return new String(result);
            } catch (Exception e) {
                e.printStackTrace();
                return null;
            }
        }

        @Override
        protected void onPostExecute(String result) {
            Intent notificationsIntent = new Intent(getApplicationContext(), NotificationsActivity.class);
            notificationsIntent.putExtra(EXTRA_MESSAGE, result);
            startActivity(notificationsIntent);
        }
    }


	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

}
