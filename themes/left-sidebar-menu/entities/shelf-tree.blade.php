 



	 
    
 

 @foreach($sidebarTree as $bookChild)
 @include('entities.list-tree', ['entity' => $bookChild, 'classes' => $current->matches($bookChild)? 'selected' : ''])
 @endforeach
 
 



