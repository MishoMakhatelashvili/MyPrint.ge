@extends('layouts.app')

@section('title', 'Page Title')

@section('header')
      @include('components.header')
@endsection


@section('content')
<div class="container">
  <nav class="navbar navbar-default">

  </nav>
    <div class="row main_content">
        <div class="col-md-4">
              <img style="width:100%" src="/storage/{{$printer['0']->photos['0']->path}}"/>
        </div>
        <div class="col-md-8">
            <h4 class="printer_title" style="margin-top: 20px;">
               {{$printer['0']->brand->name}} {{$printer['0']->model}} {{$printer['0']->category->name}}
            </h4>
            <hr class="soft">
            <p>პრინტერი,ქსეროქსი სკანერი.კომბაინი არის იდეალურ მდგომარეობაში,არის ერთერთი ყველაზე გამძლე მოდელი მოყვება ახალი კარტრიჯი.</p>
             <hr class="soft">
            <h5>გაიცემა 6 თვიანი გარანტია!</h5>
             <hr class="soft">
           <p class="lari_i">}200</p>
        </div>
           <table class="table table-bordered">
            <tbody>
            <tr class="techSpecRow">
              <th colspan="2">ტექნიკური დეტალები</th>
            </tr>
            <tr class="techSpecRow">
            <td class="techSpecTD1">
            <b>მოდელი:</b> </td>
            <td class="techSpecTD2">HP LaserJet M1120</td></tr>
            <tr class="techSpecRow"><td class="techSpecTD1"><b>ბეჭვდის ტექნოლოგია:</b> </td><td class="techSpecTD2">ლაზერული</td></tr>
            <tr class="techSpecRow"><td class="techSpecTD1"><b>ფერები:</b> </td><td class="techSpecTD2">შავთეთრი</td></tr>
            <tr class="techSpecRow"><td class="techSpecTD1"><b>ბეჭვდის სისწრაფე:</b> </td><td class="techSpecTD2">20 გვ/წთ</td></tr>
            <tr class="techSpecRow"><td class="techSpecTD1"><b>ორმხრივი ბეჭდვა:</b> </td><td class="techSpecTD2">არა</td></tr>
            <tr class="techSpecRow"><td class="techSpecTD1"><b>გაფართოება:</b> </td><td class="techSpecTD2">1200x600dpi</td></tr>
            <tr class="techSpecRow"><td class="techSpecTD1"><b>კარტრიჯის ტიპი:</b> </td><td class="techSpecTD2">36A</td></tr>
            <tr class="techSpecRow"><td class="techSpecTD1"><b>კარტრიჯის რესურსი:</b> </td><td class="techSpecTD2">1500 (გვერდი)</td></tr>
            </tbody>
         </table>
    </div>
</div>


@endsection


