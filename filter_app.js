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

    function getindex(id)
    {
        for(var i=0;i<$scope.listStudent.length;i++)
        if($scope.listStudent[i].id==id)
        return i;
        return -1;
    }

    $scope.edit=function(id)
    {
        var index=this.$index;
        var student=$scope.listStudent[index];
        $scope.id=student.id;
        $scope.name=student.name;
        $scope.age=student.age;
        $scope.gender=student.gender;
        $scope.course=student.course;
        $scope.address=student.address;
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