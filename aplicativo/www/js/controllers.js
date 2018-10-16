angular.module('controllers',['service'])

.controller('OfertasController',function($scope,webservice,$ionicListDelegate){
  webservice.getOfertas($scope);
  $scope.addFavoritos = function(oferta){
    var favoritos = webservice.getFavoritos();
    for(var k in favoritos){
      if(oferta.id ==  favoritos[k].id ){
        alert("Essa oferta já está adicionada");
        $ionicListDelegate.closeOptionButtons();
        return;
      }
    }
    favoritos.push(oferta);
    webservice.setFavoritos(favoritos);
    alert("Registro adicionado aos favoritos");
    $ionicListDelegate.closeOptionButtons();


  };
})

.controller('FavoritosController',function($scope,webservice,$ionicListDelegate){
  $scope.favoritos = webservice.getFavoritos();
  $scope.removeFavoritos = function(oferta){
    var favoritos = webservice.getFavoritos();
    for(var k in favoritos){
      if(oferta.id ==  favoritos[k].id ){
        favoritos.splice(k,1);
      }
    }

    webservice.setFavoritos(favoritos);
    $ionicListDelegate.closeOptionButtons();

  };
})
