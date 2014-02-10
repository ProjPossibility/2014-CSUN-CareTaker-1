package com.csun2014css12.carefree;

import java.util.ArrayList;
import java.util.List;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.ListActivity;
import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.os.Vibrator;
import android.support.v4.app.NavUtils;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.ArrayAdapter;
import android.widget.ListView;

public class NotificationsActivity extends ListActivity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		// Show the Up button in the action bar.
		setupActionBar();
		Intent intent = getIntent();
        String message = intent.getStringExtra(MainActivity.EXTRA_MESSAGE);
		setContentView(R.layout.activity_notifications);

		if (message != null) {
			
 	        JSONObject jObject;
				try {
					jObject = new JSONObject(message);;				
					JSONArray data_jarray = jObject.getJSONArray("data");
					List<String> notificationNames = new ArrayList<String>();
					
					for (int i=0; i < data_jarray.length(); i++)
					{
					    try {
					        JSONObject oneObject = data_jarray.getJSONObject(i);
					        String notification = oneObject.getString("notification");
					        notificationNames.add(notification);
					    } catch (JSONException e) {
					        // Oops
					    }
					}
					
					ListView listView = getListView();
					
					ArrayAdapter<String> myarrayAdapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, notificationNames);
					
					listView.setAdapter(myarrayAdapter);
					listView.setTextFilterEnabled(true);

				} catch (JSONException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
					Log.e("Error","JSONException");
				} 
 
         } else {
             // error occurred
         	Log.e("Error","Somethignn went wrong.");
         }
		
		Vibrator v = (Vibrator) getSystemService(Context.VIBRATOR_SERVICE);
		v.vibrate(2500);
	}

	/**
	 * Set up the {@link android.app.ActionBar}.
	 */
	private void setupActionBar() {

		getActionBar().setDisplayHomeAsUpEnabled(true);

	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.notifications, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		switch (item.getItemId()) {
		case android.R.id.home:
			// This ID represents the Home or Up button. In the case of this
			// activity, the Up button is shown. Use NavUtils to allow users
			// to navigate up one level in the application structure. For
			// more details, see the Navigation pattern on Android Design:
			//
			// http://developer.android.com/design/patterns/navigation.html#up-vs-back
			//
			NavUtils.navigateUpFromSameTask(this);
			return true;
		}
		return super.onOptionsItemSelected(item);
	}

}
