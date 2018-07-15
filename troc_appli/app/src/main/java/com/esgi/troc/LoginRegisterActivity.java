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
        /**
         *  su dung cach add fragment> show,hide...
         */
//        initFragment()
//        //show fragment 1
//        showFirstFragment()
        /**
         * su dung cach replace truc tiep cac view tu containerView
         */
        initFragment();
        showFirstFragment();
        TextView tvFirst= findViewById(R.id.buttonLogin);
        TextView tvSecond= findViewById(R.id.buttonRegister);

        tvFirst.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                //DO SOMETHING! {RUN SOME FUNCTION ... DO CHECKS... ETC}
                firstSelected();
                showFirstFragment();
            }
        });

        tvSecond.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                //DO SOMETHING! {RUN SOME FUNCTION ... DO CHECKS... ETC}
                secondSelected();
                showSecondFragment();
            }
        });
    }

    public void  firstSelected()
    {
        /*tvFirst.setBackgroundResource(R.drawable.bg_selected);
        tvSecond.setBackgroundResource(R.drawable.bg_un_selected);*/
        tvFirstIsCheck=true;
    }

    public void  secondSelected()
    {
        /*tvSecond.setBackgroundResource(R.drawable.bg_selected);
        tvFirst.setBackgroundResource(R.drawable.bg_un_selected);*/
        tvFirstIsCheck=false;
    }

    public void initFragment()
    {
        mFirstFragment = new FirstFragment()/*.apply { listener=this@LoginRegisterActivity }*/;
        mSecondFragment = new SecondFragment();
    }

    public void showFirstFragment()
    {
        /*supportFragmentManager.beginTransaction()
                .setCustomAnimations(R.anim.left_in,R.anim.left_out)
                .replace(R.id.main_layout,mFirstFragment,FirstFragment::class.java.name)
                .commit();*/
        firstSelected();
    }

    public void showSecondFragment()
    {
        /*supportFragmentManager.beginTransaction()
                .addToBackStack(null)
                .setCustomAnimations(R.anim.right_in,R.anim.right_out,R.anim.left_in,R.anim.left_out)
                .replace(R.id.main_layout,mSecondFragment,SecondFragment::class.java.name)
                .commit()*/
        secondSelected();
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
