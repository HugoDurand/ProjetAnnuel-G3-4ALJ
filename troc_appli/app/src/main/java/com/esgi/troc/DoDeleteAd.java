package com.esgi.troc;

import android.content.Context;
import android.content.Intent;
import android.os.AsyncTask;
import android.widget.Toast;

import org.json.JSONObject;

import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;
import java.util.Calendar;

/**
 * Created by mathy on 29/08/2018.
 */

public class DoDeleteAd extends AsyncTask<String, Void, Integer>
{
    private Context context;
    private int idAd;
    String API = "http://10.0.2.2:8000/";

    public DoDeleteAd(Context context,int idAd)
    {
        this.context = context;
        this.idAd = idAd;
    }

    protected void onPreExecute()
    {
        //display progress dialog.

    }
    protected Integer doInBackground(String... strings)
    {
        try {
            URL url = new URL(API+"api/annonce/delete/"+idAd);
            HttpURLConnection httpURLConnection = (HttpURLConnection) url.openConnection();
            httpURLConnection.setRequestProperty("Content-Type", "application/json");
            httpURLConnection.setRequestProperty("Accept", "application/json");
            httpURLConnection.setRequestMethod("DELETE");
            httpURLConnection.connect();

            int HttpResult = httpURLConnection.getResponseCode();
            return HttpResult;
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
        return 0;
    }

    protected void onPostExecute(Integer codeReturned)
    {
        if (codeReturned == 204) {
            Intent resultIntent = new Intent();
            ((DisplaySingleAdsActivity)context).setResult(codeReturned, resultIntent);
            ((DisplaySingleAdsActivity)context).finish();
        }
        Toast.makeText(context, "annonce supprimé avec succes", Toast.LENGTH_SHORT).show();
        // dismiss progress dialog and update ui
    }
}
