package com.esgi.troc;

import android.content.Context;
import android.support.annotation.Nullable;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.List;

/**
 * A placeholder fragment containing a simple view.
 */
public class Home extends AppCompatActivity
{

    public static final String LIFE_CYCLE_FRAGMENT = "LIFE_CYCLE_FRAGMENT";

    private ArrayList<String> data = new ArrayList<String>();

    @Override
    public void onCreate(@Nullable Bundle savedInstance)
    {
        super.onCreate(savedInstance);
        setContentView(R.layout.ads_activity);
        ListView lv = findViewById(R.id.listview);
        generateListContent();
        lv.setAdapter(new MyListAdapter(this, R.layout.list_ads,data));
        lv.setOnItemClickListener(new AdapterView.OnItemClickListener()
        {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id)
            {
                Toast.makeText(Home.this, "List item was clicked at " + position, Toast.LENGTH_SHORT).show();
            }
        });
        Log.i(LIFE_CYCLE_FRAGMENT,"onCreate");
    }

    private void generateListContent()
    {
        for(int i=0;i<24;i++)
        {
            data.add("this is row number "+i);
        }
    }

    private class MyListAdapter extends ArrayAdapter<String>
    {
        private int layout;
        private List<String> mObjects;
        private MyListAdapter(Context context, int resource, List<String> objects)
        {
            super(context, resource, objects);
            mObjects = objects;
            layout = resource;
        }

        @Override
        public View getView(final int position, View convertView, ViewGroup parent)
        {
            ViewHolder mainViewHolder = null;
            if(convertView == null)
            {
                LayoutInflater inflater = LayoutInflater.from(getContext());
                convertView = inflater.inflate(layout, parent, false);
                ViewHolder viewHolder = new ViewHolder();
                viewHolder.current_id_ads = (TextView) convertView.findViewById(R.id.id_ads);
                viewHolder.current_ads_creator = (TextView) convertView.findViewById(R.id.ads_creator);
                viewHolder.current_ads_title = (TextView) convertView.findViewById(R.id.ads_title);
                viewHolder.button = (Button) convertView.findViewById(R.id.viewThisAdd);
                convertView.setTag(viewHolder);
            }
            mainViewHolder = (ViewHolder) convertView.getTag();
            mainViewHolder.button.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View v) {
                    Toast.makeText(getContext(), "Button was clicked for list item " + position, Toast.LENGTH_SHORT).show();
                }
            });
            mainViewHolder.current_ads_title.setText(getItem(position));
            
            return convertView;
        }
    }
    public class ViewHolder{
        TextView current_id_ads;
        TextView current_ads_creator;
        TextView current_ads_title;
        Button button;
    }
}
