@extends('layouts.master')

@section('title', 'Calculadoras')

@section('content')
<div class="row">
    <div class="col-md-2 mb-3">
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">IMC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Peso Ideal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Calorias diárias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="burned-tab" data-toggle="tab" href="#burned" role="tab" aria-controls="burned" aria-selected="false">Gasto calórico</a>
            </li>
        </ul>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-10">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">            
                <div class="yz-widget" data-calculator-type="bmi" data-language="pt" data-unit-system="metric" data-background-color="#d6dbdf" data-text-color="#3e3e3e" data-primary-color="#70D34A" data-alternate-background-color="#FFFFFF" data-alternate-text-color="#FFFFFF" data-secondary-color="#3e3e3e"><span class="yz-copyright">Powered by <a href="https://www.yazio.com/pt/calculadora-imc">YAZIO</a></span></div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">            
                <div class="yz-widget" data-calculator-type="ideal_weight" data-language="pt" data-unit-system="metric" data-background-color="#d6dbdf" data-text-color="#3e3e3e" data-primary-color="#70D34A" data-alternate-background-color="#FFFFFF" data-alternate-text-color="#FFFFFF" data-secondary-color="#3e3e3e"><span class="yz-copyright">Powered by <a href="https://www.yazio.com/pt/calculadora-peso-ideal">YAZIO</a></span></div>

            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">            
                <div class="yz-widget" data-calculator-type="daily_need" data-language="pt" data-unit-system="metric" data-background-color="#d6dbdf" data-text-color="#3e3e3e" data-primary-color="#70D34A" data-alternate-background-color="#FFFFFF" data-alternate-text-color="#FFFFFF" data-secondary-color="#3e3e3e"><span class="yz-copyright">Powered by <a href="https://www.yazio.com/pt/calculadora-calorias-diarias">YAZIO</a></span></div>
            </div>
            <div class="tab-pane fade" id="burned" role="tabpanel" aria-labelledby="burned-tab">                
                <div class="yz-widget" data-calculator-type="calories_burned" data-language="pt" data-unit-system="metric" data-background-color="#d6dbdf" data-text-color="#3e3e3e" data-primary-color="#70D34A" data-alternate-background-color="#FFFFFF" data-alternate-text-color="#FFFFFF" data-secondary-color="#3e3e3e"><span class="yz-copyright">Powered by <a href="https://www.yazio.com/pt/calculadora-gasto-calorico">YAZIO</a></span></div>
            </div>
        </div>
    </div>     
</div>

<script src="https://widget.yazio.com/calculator.js" async></script>
@endsection