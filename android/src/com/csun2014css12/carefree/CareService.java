package com.csun2014css12.carefree;

import java.io.BufferedReader;
import java.io.InputStreamReader;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;

import android.app.IntentService;
import android.content.Intent;
import android.util.Log;

public class CareService extends IntentService {
	
    public static final String LOG_TAG = "CareService";

    public CareService() {
        super("CareService");
    }
    
    @Override
    public void onCreate(){
    	super.onCreate();
    }

    @Override
    protected void onHandleIntent(Intent workIntent) {
    	try {
    		HttpClient httpclient = new DefaultHttpClient();
    		HttpGet httpget = new HttpGet("http://carefree.v4.net/carefree/public/api/v1/users/1/generate-notifications");
    		HttpResponse response = httpclient.execute(httpget);
    		
    		BufferedReader reader = new BufferedReader(new InputStreamReader(response.getEntity().getContent(), "iso-8859-1"), 8);
    		StringBuilder sb = new StringBuilder();
    		sb.append(reader.readLine() + "\n");
    		String line = "0";
           
    		while ((line = reader.readLine()) != null) {
    			sb.append(line + "\n");
    		}
    		reader.close();
    		String results = sb.toString();
             
    		if (results != null && results != "") {
    			 Log.d("serviceRESULTS",results);
    		} else {
        	   Log.d("serviceRESULTS","none");
    		}
    	} catch (Exception e) {
    		e.printStackTrace();
    	}
    }
}