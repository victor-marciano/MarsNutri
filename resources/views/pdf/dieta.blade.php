<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <style type="text/css">      
  
  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }
  
  a {
    color: #0087C3;
    text-decoration: none;
  }
  
  body {
    position: relative;
    margin: 0 auto; 
    color: #555555;
    background: #FFFFFF;    
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 
    font-size: 12px;    
  }
  
  header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #AAAAAA;
  }
  
  #logo {
    float: left;
    margin-top: 8px;
  }
  
  #logo img {
    height: 110px;
  }
  
  #company {
    float: center;
    text-align: right;
  }
  
  
  #details {
    margin-bottom: 50px;
  }
  
  #client {
    padding-left: 6px;
    border-left: 6px solid #57B223;
    float: left;
  }
  
  #client .to {
    color: #777777;
  }
  
  h2.name {
    font-size: 1.4em;
    font-weight: normal;
    margin: 0;
  }
  
  #invoice {
    float: center;
    text-align: right;
  }
  
  #invoice h1 {
    color: #57B223;
    font-size: 1.8em;
    line-height: 1em;
    font-weight: normal;
    margin: 0  0 10px 0;
  }
  
  #invoice .date {
    font-size: 0.9em;
    color: #777777;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px;
  }
  
  table th,
  table td {
    padding: 20px;
    background: #EEEEEE;
    text-align: center;
    border-bottom: 1px solid #FFFFFF;
  }
  
  table th {
    white-space: nowrap;        
    font-weight: bold;
  }
  
  table td {
    text-align: center;
  }  
  
  table .no {
    color: #FFFFFF;
    font-size: 1.6em;
    background: #57B223;
  }  
  
  table .unit {
    background: #DDDDDD;
  }
  
  table .qty {
  }
  
  table .total {
    background: #57B223;
    color: #FFFFFF;
    font-weight: bold;
    font-size: 0.9em;
  }
  
  table td.unit,
  table td.qty,
  table td.total {
    font-size: 0.9em;
    font-weight: bold;
  } 
    
  #notices{
    padding-left: 6px;
    border-left: 6px solid #57B223;  
  }
  
  #notices .notice {
    font-size: 1.0em;
  }
  
  footer {
    color: #777777;
    width: 100%;
    height: 30px;
    position: absolute;
    bottom: 0;
    border-top: 1px solid #AAAAAA;
    padding: 8px 0;
    text-align: center;
  }
    </style>
</head>
  <body>
    <header class="clearfix">
        <div id="logo">
            <img src="{{ public_path('img/marsnutri.png') }}">
        </div>
        <div id="company">
          <h2 class="name">MarsNutri</h2>
        <div>Avenida Paulo Faccini - Guarulhos - SP</div>
        <div>+55(011)931519757</div>
        <div><a href="mailto:vpm.marciano@gmail.com">vpm.marciano@gmail.com</a></div>          
        </div>        
    </header>   
    <main> 
        <div id="details" class="clearfix">
            <div id="client">
              <div class="to">{{ $dieta->nome }}</div>
              <div class="address">Paciente: <strong>{{ $dieta->name }} </strong></div>
              <div class="address">Objetivo da dieta: <strong>{{ $dieta->objetivo }}</strong></div>
              <div class="address">Calorias a serem consumidas: <strong>{{ $dieta->calorias_total }}kcal</strong></div>
            </div>
            <div id="invoice">
              <h1>Previsão</h1>
              <div class="date">Inicio da dieta: 01/06/2014</div>
              <div class="date">Término da dieta: 30/06/2014</div>
            </div>
        </div>           
    @foreach ($dieta->refeicao as $refeicao)
     <h3>{{ $refeicao->nome }} - {{ $refeicao->horario }}</h3>
         <table border="0" cellspacing="0">
             <thead>
                <tr>
                    <th class="total">Alimento</th>
                    <th class="qty">Calorias</th>
                    <th class="unit">Carbohidratos</th>
                    <th class="qty">Proteínas</th>
                    <th class="unit">Gorduras</th>
                </tr>
             </thead>
             <tbody>
                 @foreach ($refeicao->alimentos as $alimento)
                    <tr>                    
                        <td class="total">{{ $alimento->descricao }}</td>
                        <td class="qty">{{ $alimento->calorias }}kcal</td>
                        <td class="unit">{{ $alimento->carbohidrato }}g</td>
                        <td class="qty">{{ $alimento->proteina }}g</td>
                        <td class="unit">{{ $alimento->gordura }}g</td>
                    </tr>                     
                 @endforeach
             </tbody>
             <tfoot>
                 <tr>
                     <th class="total">Total</th>
                     <th class="qty">{{ $refeicao->calorias_refeicao }}kcal</th>
                     <th class="unit">{{ $refeicao->carbohidrato_refeicao }}g</th>
                     <th class="qty">{{ $refeicao->proteina_refeicao }}g</th>
                     <th class="unit">{{ $refeicao->gordura_refeicao }}g</th>
                 </tr>
             </tfoot>
         </table>
         <br><br>
     @endforeach 
     
     <div id="notices">       
       <div class="notice">Obrigado pela confiança! Estamos a disposição para auxiliá-lo(a) nos seus objetivos.</div>
     </div>
     <br><br>
   </main>
   <footer>
     Dieta gerada pela MarsNutri. 2020
   </footer>
   
  </body>
</html>