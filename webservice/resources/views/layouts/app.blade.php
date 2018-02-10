<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Webservice - Ofertas</title>
    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Webservice - Ofertas</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/ofertas">Ofertas</a></li>
              <li><a href="#">Favoritos</a></li>
            </ul>
            <!--
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
            -->
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <main role="main">

        @yield("content")

      </main>



    </div> <!-- /container -->


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.14/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.14/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tabelaOfertas').DataTable({
            lengthChange: false,
            language: {
                info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                infoEmpty: "Sem registros",
                infoFiltered: 'filtrados de _MAX_ registros',
                emptyTable: "Nenhum registro avaliado na tabela",
                zeroRecords: "Nenhum registro encontrado para a busca",
                lengthMenu: "Mostrando _MENU_ registros",
                searchPlaceHolder: 'Filtro',
                search: 'Buscar:',
                paginate: {
                    first: '<<',
                    last: '>>',
                    previous: 'ANTERIOR',
                    next: 'PRÓXIMO'
                }
            }
        });
    });
</script>
  </body>
</html>
