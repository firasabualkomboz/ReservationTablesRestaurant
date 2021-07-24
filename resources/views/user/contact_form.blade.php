@extends('layouts.user')
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>

<div class="container panel panel-default col-lg-6 mt-5">
        <h2 class="panel-heading">تواصل معنا</h2>
    <form id="contactForm">
        @csrf

        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="الأسم" id="name">
        </div>

        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="الأيميل" id="email">
        </div>

        <div class="form-group">
            <input type="text" name="mobile_number" class="form-control" placeholder="رقم الجوال" id="mobile_number">
        </div>

        <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="الموضوع" id="subject">
        </div>

        <div class="form-group">
          <textarea class="form-control" name="message" placeholder="الرسالة" id="message"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit" id="submit">إرسال</button>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

   <script type="text/javascript">



    $('#contactForm').on('submit',function(e){
        e.preventDefault();

        let name = $('#name').val();
        let email = $('#email').val();
        let mobile_number = $('#mobile_number').val();
        let subject = $('#subject').val();
        let message = $('#message').val();

        $.ajax({
          url: "{{route('contact')}}",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            name:name,
            email:email,
            mobile_number:mobile_number,
            subject:subject,
            message:message,
          },
          success:function(response){
            console.log(response);
          },
         });
        });
      </script>
 </body>
</html>
