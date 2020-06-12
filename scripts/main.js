angular.module('PeopleListApp', [])
  .controller('PeopleListController', function() {
    var listOfPeople = this;
    listOfPeople.people = [
      {id:1, firstName:'John', lastName:'Smith', email:'john.smith@hotmail.com'},
      {id:2, firstName:'Paul', lastName:'Allen', email:'paul.allen@microsoft.com'},
      {id:3, firstName:'James', lastName:'Johnston', email:'james.johnston@gmail.com'},
      {id:4, firstName:'Steve', lastName:'Buscemi', email:'steve.buscemi@yahoo.com'},
      {id:5, firstName:'Doug', lastName:'Simons', email:'doug.simons@hotmail.com'},
    ];

    listOfPeople.alertEmail = function(email) {
      alert(email);
    };
  });