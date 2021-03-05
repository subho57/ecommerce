@extends('web.layout')
@section('content')
       <!-- End Header Content -->

       <!-- NOTIFICATION CONTENT -->
         @include('web.common.notifications')
      <!-- END NOTIFICATION CONTENT -->

       <!-- Carousel Content -->
       <?php  echo $final_theme['carousel']; ?>
       <!-- Fixed Carousel Content -->

      <!-- Banners Content -->
      <!-- Products content -->

      <?php

      $product_section_orders = json_decode($final_theme['product_section_order'], true);
      foreach ($product_section_orders as $product_section_order){
          if($product_section_order['order'] == 1 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
       ?>
          @include($r)
      <?php
          }
          if($product_section_order['order'] == 2 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
       ?>
          @include($r)
      <?php
          }
          if($product_section_order['order'] == 3 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
       ?>
          @include($r)
      <?php
          }
          if($product_section_order['order'] == 4 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
       ?>
          @include($r)
      <?php
          }
          if($product_section_order['order'] == 5 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
       ?>
          @include($r)
      <?php
          }
          if($product_section_order['order'] == 6 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
       ?>
          @include($r)
      <?php
          }
          if($product_section_order['order'] == 7 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
       ?>
          @include($r)
      <?php
          }
          if($product_section_order['order'] == 8 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
        ?>
          @include($r)
        <?php
          }
          if($product_section_order['order'] == 9 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
        ?>
          @include($r)
        <?php
          }
          if($product_section_order['order'] == 10 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
        ?>
          @include($r)
        <?php
          }
          if($product_section_order['order'] == 11 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
        ?>
          @include($r)
        <?php
          }
          if($product_section_order['order'] == 12 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
        ?>
          @include($r)
        <?php
          }

          if($product_section_order['order'] == 13 && $product_section_order['status'] == 1){
          $r =   'web.product-sections.' . $product_section_order['file_name'];
        ?>
          @include($r)
        <?php
          }
       }
      ?>
@include('web.common.scripts.addToCompare')
@include('web.common.scripts.Like')
@endsection
