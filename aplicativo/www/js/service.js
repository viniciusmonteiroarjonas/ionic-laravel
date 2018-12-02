angular.module('service',['ngStorage'])

.service('webservice',function($localStorage,$http){

  //$localStorage.titulo = "Curso de Ionic com Laravel";




  var _getOfertas = function(scope){


    $http.get('http://localhost:8000/api/ofertas').then(
      function(retorno){
        $localStorage.ofertas = retorno.data;
        scope.ofertas = retorno.data;
        return;

    },function(erro){

    });

  };
  var _getFavoritos = function(){
    if(!$localStorage.favoritos){
      $localStorage.favoritos = [];
    }

    return $localStorage.favoritos;

  };

  var _setFavoritos = function(favoritos){
    $localStorage.favoritos = favoritos;
  };

  return {
    getOfertas: _getOfertas,
    getFavoritos: _getFavoritos,
    setFavoritos: _setFavoritos
  };

})
