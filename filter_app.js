angular.module('myapp',[])
.controller('myctrl',function($scope)
{
    $scope.listStudent=[
        {id:'S01', name:'Sharika', age:21, gender:'F', course:'MAIS', address: 'Kerala'},
         {id:'S02', name:'Dominic', age:23, gender:'M', course:'MPHY', address: 'Bangalore'},
          {id:'S03', name:'Shyam', age:21, gender:'M', course:'MCA', address: 'Punjab'},
           {id:'S04', name:'Sam', age:22, gender:'M', course:'MCA', address: 'Bangalore'}
    ];
    $scope.save=function()
    {
        var index=getindex($scope.id);
        $scope.listStudent[index].name=$scope.name;
        $scope.listStudent[index].age=$scope.age;
        $scope.listStudent[index].gender=$scope.gender;
        $scope.listStudent[index].age=$scope.course;
        $scope.listStudent[index].age=$scope.address;
    }
    $scope.add=function()
    {
        $scope.listStudent.push({
            id:$scope.id,name:$scope.name,age:$scope.age,gender:$scope.gender,course:$scope.course,address:$scope.address
        });
    }
    $scope.delete=function()
    {
        var result=confirm('Are you sure?');
        if(result==true)
        {
            var index=this.$index;
            $scope.listStudent.splice(index,1);
        }
    };
});