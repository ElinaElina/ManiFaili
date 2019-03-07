@extends('layouts.default')
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/firstpage.css" />
    
    <title>Home page</title>
 
    @section('content')

    <div class="wrapper">
      <!-- si bus liela/pirma bilde tai jaiznem 100% lapas platuma -->
      <img src="https://wallpapercave.com/wp/k1ElkKw.jpg" alt="cat" />

      <div class="a-container">
        <!--
          ieliekam musu mazas bildes ar saja .wrapper div lai liela bilde un mazas kopsumma ir
          vienada platuma
          velams tomer izveleties klasu nosaukumus kurus izlasot ir apmeram skaidrs par ko ir runa
          un raksta ar maziem burtiem
        -->
        <div class="A">
          <!-- so mes izveidojam lai varetu uzlikt background color -->
          <div class="a-inner">
            <!--
              ja - ari sadi var noradi bildes platumu - izmantojot width atributu
              tacu parasti jau so tomer dara ieks css.
            -->
            <img src="https://wallpapercave.com/wp/k1ElkKw.jpg" alt="cat" />
            <h2>This is paragraph</h2>

            <p>
              This is paragraph. Lorem ipsum dolor sit amet, aliquid suavitate
              vis in, paulo sanctus eos no. No eum appetere disputationi. Ex
              paulo eruditi sed. Commodo discere interpretaris nec ei. Et ferri
              propriae ius, luptatum torquatos vis id. Eam labores definitionem
              ex, cu mea aperiam petentium. Pri idque reprehendunt cu, at nulla
              apeirian pro. Et sed quod vituperata, qui id possim platonem. Ius
              ut partiendo ullamcorper. This is paragraph. Lorem ipsum dolor sit
              amet, aliquid suavitate vis in, paulo sanctus eos no. No eum
              appetere disputationi. Ex paulo eruditi sed. Commodo discere
              interpretaris nec ei. Et ferri propriae ius, luptatum torquatos
              vis id. Eam labores definitionem ex, cu mea aperiam petentium. Pri
              idque reprehendunt cu, at nulla apeirian pro. Et sed quod
              vituperata, qui id possim platonem. Ius ut partiendo ullamcorper.
            </p>
          </div>
        </div>
        <div class="A">
          <!-- so mes izveidojam lai varetu uzlikt background color -->
          <div class="a-inner">
            <img src="https://wallpapercave.com/wp/k1ElkKw.jpg" alt="cat" />
            <h2>This is paragraph</h2>
            <p>
              This is paragraph. Lorem ipsum dolor sit amet, aliquid suavitate
              vis in, paulo sanctus eos no. No eum appetere disputationi. Ex
              paulo eruditi sed. Commodo discere interpretaris nec ei. Et ferri
              propriae ius, luptatum torquatos vis id. Eam labores definitionem
              ex, cu mea aperiam petentium. Pri idque reprehendunt cu, at nulla
              apeirian pro. Et sed quod vituperata, qui id possim platonem. Ius
              ut partiendo ullamcorper. This is paragraph. Lorem ipsum dolor sit
              amet, aliquid suavitate vis in, paulo sanctus eos no. No eum
              appetere disputationi. Ex paulo eruditi sed. Commodo discere
              interpretaris nec ei. Et ferri propriae ius, luptatum torquatos
              vis id. Eam labores definitionem ex, cu mea aperiam petentium. Pri
              idque reprehendunt cu, at nulla apeirian pro. Et sed quod
              vituperata, qui id possim platonem. Ius ut partiendo ullamcorper.
            </p>
          </div>
        </div>
        <div class="A">
          <!-- so mes izveidojam lai varetu uzlikt background color -->
          <div class="a-inner">
            <img src="https://wallpapercave.com/wp/k1ElkKw.jpg" alt="cat" />
            <h2>This is paragraph</h2>
            <p>
              This is paragraph. Lorem ipsum dolor sit amet, aliquid suavitate
              vis in, paulo sanctus eos no. No eum appetere disputationi. Ex
              paulo eruditi sed. Commodo discere interpretaris nec ei. Et ferri
              propriae ius, luptatum torquatos vis id. Eam labores definitionem
              ex, cu mea aperiam petentium. Pri idque reprehendunt cu, at nulla
              apeirian pro. Et sed quod vituperata, qui id possim platonem. Ius
              ut partiendo ullamcorper. This is paragraph. Lorem ipsum dolor sit
              amet, aliquid suavitate vis in, paulo sanctus eos no. No eum
              appetere disputationi. Ex paulo eruditi sed. Commodo discere
              interpretaris nec ei. Et ferri propriae ius, luptatum torquatos
              vis id. Eam labores definitionem ex, cu mea aperiam petentium. Pri
              idque reprehendunt cu, at nulla apeirian pro. Et sed quod
              vituperata, qui id possim platonem. Ius ut partiendo ullamcorper.
            </p>
          </div>
        </div>
      </div>
    </div>
  @endsection

