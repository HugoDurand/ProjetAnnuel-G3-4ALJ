package com.esgi.troc;

import android.content.Context;
import android.content.Intent;
import android.os.AsyncTask;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;

/**
 * Created by mathy on 27/08/2018.
 */

public class DoGetUsers extends AsyncTask<String, Void, Integer>
{
    private Context context;
    private String login;
    private String passwd;
    String API = "http://10.0.2.2:8000/";

    public DoGetUsers(Context context, String login, String passwd)
    {
        this.context=context;
        this.login=login;
        this.passwd=passwd;
    }

    protected void onPreExecute()
    {
        //display progress dialog.

    }
    protected Integer doInBackground(String... strings)
    {
        try {
            Log.i("json api", "etape 2");
            URL url = new URL(API+"api/users");
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

            JSONArray jsonArray = new JSONArray(response.toString());
            for (int i = 0; i < jsonArray.length(); i++)
            {
                JSONObject explrObject = jsonArray.getJSONObject(i);
                Log.i("json api", "username = "+explrObject.getString("username"));
                if(explrObject.getString("username").equals(login))
                {
                    Log.i("json api", "id = "+explrObject.getInt("id"));
                    return explrObject.getInt("id");
                }
            }
            Log.i("json api", "etape 6");
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
        return 0;
    }

    protected void onPostExecute(Integer idReturned)
    {
        if (idReturned != 0) {
            Intent resultIntent = new Intent();
            ((LoginRegisterActivity)context).setResult(3, resultIntent);
            ((LoginRegisterActivity)context).finish();
        }
        Toast.makeText(context, "login = "+ login +" and id user returned = "+idReturned, Toast.LENGTH_SHORT).show();
        // dismiss progress dialog and update ui
    }
}
