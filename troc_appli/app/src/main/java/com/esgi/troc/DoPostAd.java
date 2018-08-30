package com.esgi.troc;

import android.content.Context;
import android.content.Intent;
import android.os.AsyncTask;
import android.util.Log;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.Calendar;

/**
 * Created by mathy on 27/08/2018.
 */

public class DoPostAd extends AsyncTask<String, Void, Integer>
{
    private Context context;
    private String titre;
    private String description;
    private int iduser;
    private String photoUrl;
    String API = "http://10.0.2.2:8000/";

    public DoPostAd(Context context, String titre, String description, String photoUrl, int iduser)
    {
        this.context = context;
        this.titre = titre;
        this.description = description;
        this.photoUrl = photoUrl;
        this.iduser = iduser;
    }

    protected void onPreExecute()
    {
        //display progress dialog.

    }
    protected Integer doInBackground(String... strings)
    {
        try {
            URL url = new URL(API+"api/annonce");
            HttpURLConnection httpURLConnection = (HttpURLConnection) url.openConnection();
            httpURLConnection.setRequestProperty("Content-Type", "application/json");
            httpURLConnection.setRequestProperty("Accept", "application/json");
            httpURLConnection.setRequestMethod("POST");

            JSONObject explrObject = new JSONObject();
            explrObject.put("titre",titre);
            explrObject.put("date", Calendar.getInstance().getTime());
            explrObject.put("description",description);
            explrObject.put("iduser",iduser);
            explrObject.put("photo",photoUrl);

            OutputStreamWriter wr = new OutputStreamWriter(httpURLConnection.getOutputStream());
            wr.write(explrObject.toString());
            wr.flush();

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
        if (codeReturned == 201) {
            Intent resultIntent = new Intent();
            ((AjouterAdsActivity)context).setResult(3, resultIntent);
            ((AjouterAdsActivity)context).finish();
        }
        Toast.makeText(context, "annonce ajouté avec succes", Toast.LENGTH_SHORT).show();
        // dismiss progress dialog and update ui
    }
}
