package com.csun2014css12.carefree;

import android.app.IntentService;
import android.content.Intent;

public class CareService extends IntentService {

	public CareService() {
		super("CareService");
    }

	@Override
    protected void onHandleIntent(Intent workIntent) {
        // Gets data from the incoming Intent
        String dataString = workIntent.getDataString();
        
        // Do work here, based on the contents of dataString

    }
}
