package com.esgi.troc;

import android.content.Context;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.widget.TextView;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

/**
 * Created by mathy on 27/08/2018.
 */

public class DoGetUser extends AsyncTask<String, Void, JSONObject>
{
    private Context context;
    TextView creatorUsernameDateCreated;
    TextView creatorEmail;
    TextView creatorTel;
    private int id;
    String API = "http://10.0.2.2:8000/";

    public DoGetUser(Context context, TextView creatorUsernameDateCreated, TextView creatorEmail, TextView creatorTel, int id)
    {
        this.context=context;
        this.id=id;
        this.creatorUsernameDateCreated=creatorUsernameDateCreated;
        this.creatorEmail=creatorEmail;
        this.creatorTel=creatorTel;
    }

    protected void onPreExecute()
    {
        //display progress dialog.

    }
    protected JSONObject doInBackground(String... strings)
    {
        try {
            Log.i("json api", "etape 2");
            URL url = new URL(API+"api/user/"+id);
            HttpURLConnection httpURLConnection = (HttpURLConnection) url.openConnection();
            httpURLConnection.setRequestMethod("GET");
            Log.i("json api", "etape 2-3");
            httpURLConnection.connect();
            Log.i("json api", "etape 3");

            InputStream is = httpURLConnection.getInputStream();
            BufferedReader rd = new BufferedReader(new InputStreamReader(is));
            StringBuilder response = new StringBuilder(); // or StringBuffer if Java version 5+
            String line;
            Log.i("json api", "etape 4");
            while ((line = rd.readLine()) != null)
            {
                response.append(line);
                response.append('\r');
            }
            rd.close();
            Log.i("json api", "etape 5");

            JSONObject explrObject = new JSONObject(response.toString());
            return explrObject;
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
        return new JSONObject();
    }

    protected void onPostExecute(JSONObject explrObject)
    {
        try {
            if (explrObject.getInt("id") != 0) {
                creatorUsernameDateCreated.setText("Annonce créé par "+explrObject.getString("username"));
                creatorEmail.setText("Email: "+explrObject.getString("email"));
                creatorTel.setText("Telephone: "+explrObject.getString("tel"));
            }
            //Toast.makeText(context, "login = "+ login +" and id user returned = "+explrObject.getInt("id"), Toast.LENGTH_SHORT).show();
        } catch (JSONException e) {
            e.printStackTrace();
        }

        // dismiss progress dialog and update ui
    }
}
