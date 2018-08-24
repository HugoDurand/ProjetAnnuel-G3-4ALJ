package com.esgi.troc;

import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;

public class LoginRegisterActivity extends AppCompatActivity {


    public void clicked()
    {
        showSecondFragment();
    }

    FirstFragment mFirstFragment ;
    SecondFragment mSecondFragment;
    TextView tvFirst = null;
    TextView tvSecond = null;
    Boolean tvFirstIsCheck=true;


    @Override
    public void onCreate(@Nullable Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        Log.i("login activity","etape 1");
        setContentView(R.layout.activity_login);
        Log.i("login activity","etape 2");

        initFragment();
        showFirstFragment();
        Log.i("login activity","etape 3");
        TextView tvFirst= findViewById(R.id.buttonLogin);
        TextView tvSecond= findViewById(R.id.buttonRegister);
        Log.i("login activity","etape 4");

        tvFirst.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                //DO SOMETHING! {RUN SOME FUNCTION ... DO CHECKS... ETC}
                firstSelected();
                showFirstFragment();
            }
        });
        Log.i("login activity","etape 5");

        tvSecond.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                //DO SOMETHING! {RUN SOME FUNCTION ... DO CHECKS... ETC}
                secondSelected();
                showSecondFragment();
            }
        });
        Log.i("login activity","etape 6");
    }

    public void  firstSelected()
    {
        tvFirstIsCheck=true;
    }

    public void  secondSelected()
    {
        tvFirstIsCheck=false;
    }

    public void initFragment()
    {
        Log.i("login activity","call init");
        mFirstFragment = new FirstFragment();
        Log.i("login activity","init create fragment 1");
        getSupportFragmentManager().beginTransaction().add(R.id.main_layout, mFirstFragment).commit();
        Log.i("login activity","init attach fragment 1");
        mSecondFragment = new SecondFragment();
        Log.i("login activity","init create fragment 2");
        getSupportFragmentManager().beginTransaction().add(R.id.main_layout, mSecondFragment).commit();
        Log.i("login activity","init attach fragment 2");
    }

    public void showFirstFragment()
    {
        Log.i("login activity","before show fragment 1");
        getSupportFragmentManager().beginTransaction().replace(R.id.main_layout, mFirstFragment).addToBackStack(null).commit();
        firstSelected();
        Log.i("login activity","show fragment 1");
    }

    public void showSecondFragment()
    {
        Log.i("login activity","before show fragment 2");
        getSupportFragmentManager().beginTransaction().replace(R.id.main_layout, mSecondFragment).addToBackStack(null).commit();
        secondSelected();
        Log.i("login activity","show fragment 2");
    }

    @Override
    public void onBackPressed()
    {
        if(!tvFirstIsCheck)
        {
            firstSelected();
            tvFirstIsCheck=true;
        }
        super.onBackPressed();
    }
}
