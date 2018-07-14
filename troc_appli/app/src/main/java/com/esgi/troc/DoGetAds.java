package com.esgi.troc;

import android.content.Context;
import android.os.AsyncTask;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
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
 * Created by mathy on 14/07/2018.
 */

public class DoGetAds extends AsyncTask<Void, Void, ArrayList<Ads>>
{
    private Context context;
    private int byGetOrPost=0;
    private ListView lv;
    String API = "http://10.0.2.2:8000/";
    ArrayList<Ads> ads = new ArrayList<Ads>();

    public DoGetAds(Context context, ListView lv, int flag)
    {
        this.context=context;
        byGetOrPost=flag;
        this.lv=lv;
    }

    protected void onPreExecute()
    {
        //display progress dialog.

    }
    protected ArrayList<Ads> doInBackground(Void... params)
    {
        Log.i("json api", "etape 1");
        try
        {
            Log.i("json api", "etape 2");
            URL url = new URL(API+"api/annonces");
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
                ads.add(new Ads(explrObject.getInt("id"),explrObject.getString("titre"),explrObject.getInt("idUser")));
            }
            Log.i("json api", "etape 6");
            Log.i("json api", ads.toString());
            return ads;
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
        return null;
    }

    protected void onPostExecute(ArrayList<Ads> ads)
    {
        lv.setAdapter(new MyListAdapter(context, R.layout.list_ads,ads));
        lv.setOnItemClickListener(new AdapterView.OnItemClickListener()
        {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id)
            {
                Toast.makeText(context, "List item was clicked at " + position, Toast.LENGTH_SHORT).show();
            }
        });
        // dismiss progress dialog and update ui
    }
}
