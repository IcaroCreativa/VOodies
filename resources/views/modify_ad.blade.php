


<x-layouts.app >
    <x-slot name="title">Create ad</x-slot>
    <x-slot name="meta-Description">We are Epitech's student</x-slot>
   <h1 class="bg-blue-700 text-white">PAGEA MODIFY-AD</h1>
    <x-slot name="about">
     
    
  
  
    <div class="mx-auto max-w-screen-xl px-4  sm:px-6 lg:px-8">
      <div class=" mx-auto max-w-lg  ">
   
        <form action="{{Route('registro')}}" method="post" enctype="multipart/form-data" class=" w/2/6 px-4 py-8 sm:px-6 lg:px-8 mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl rounded-t-lg" >
          @csrf
          <div class="w-full grid  grid-cols-1 grid rows-2   ">
              <div class="grid justify-center ">
                <a href="/index" >
                  <img src="{{URL::asset('/images/Voodies_logo100.png')}}" class="h-20 rounded-sm shadow-lg">
                  </a>
              </div>
              
              <h1 class=" mx-auto  max-w-md mt-2 text-center font-medium text-blue-700 text-shadow rounded-md p-1 px-4 text-2xl "> Place your ad</h1>
          </div>
          
          
    
          <div>
            <label for="email" class=" font-medium text-sm">What is the title of the ad?</label>
    
            <div class="relative mt-1">
              <input
                type="title"
                name="title"
                id="title"
                required
                class="w-full    rounded-lg border-gray-500 border p-1 pr-8 pl-3 md:text-base shadow-sm"
                placeholder="Enter title"
              />
  
            </div>
          </div>
    
          <div class="">
            <label for="category" class="text-sm font-medium">Category</label>
    
            <div class="mt-1 flex ">
              <div class="flex" >
              <select name="category" id="category" class="md:w-60 w-40 pl-3 sm:text-sm md:text-base rounded-md border-gray-500 border " >
                @foreach($categories as $category)
                  <option value="{{$category->category ?? ''}}">{{$category->category ?? ''}}</option>
                @endforeach
              </select> 
            </div>
                <div class="flex sm:mx-5 space-x-2 mx-2 ">
                  
                <div class="flex items-center">
                    <input checked id="default-radio-1" type="radio" value="offer" name="type_ad" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 ">
                    <label for="default-radio-1" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">Offer</label>
                </div>
      
                  <div class="flex items-center  ">
                    <input id="default-radio-2" type="radio" value="request" name="type_ad" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                    <label for="default-radio-2" class="ml-2 text font-medium text-gray-900 dark:text-gray-300">Request</label>
                </div>
              </div>
          </div> 
          {{-- ---------------text-area------------ --}}
           <div class=" mt-4">
            <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
              <div class="flex justify-between items-center py-2 px-3 border-b dark:border-gray-600">
                  <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                    <p class="mr-5"> Description</p>
                    <svg class="w-6 h-6 stroke-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                     <p class="text-xs text-gray-500 pl-12 xs:pl-12 md:pl-36 md:ml-10">3000 characters max</p>
                  </div>
              </div>
              <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-gray-800">
                  <label for="editor" class="sr-only">Publish add</label>
                  <textarea id="editor" rows="8" name=description maxlength="3000" value="" class="block  h-24 px-0 w-full text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write your description..." required></textarea>
              </div>
          </div>
        {{-- -----------End text-area---------- --}}
        
        {{-- -----IMAGES UPLOAD ------------- --}}
  <div class=" padre grid grid-cols-3 h-52 border rounded-md shadow-sm border-gray-200 ">
        
    <div class="columna1 grid-cols-1 ml-4 -mt-1 ">
        
      <div class="image1  ">
        <div class="1 hidden  h-6 relative text-transparent">
            <input type="file"  id="imgInp" name="img1" accept="image/png, image/jpeg"/>
        </div>
        <div class="2 mt-2 h-20 w-20 hover:h-24 hover:w-24 " >
            <label for="imgInp">
             <img id="image1" src="{{URL::asset('/images/camera.png')}}" alt="" class="rounded-md shadow-sm" className="h-20 w-20 "/>
            </label>
        </div>
      </div>
  
      <div class="image2">
        <div class="1 hidden  h-6 relative text-transparent">
          <input type="file"  id="imgInp2" name="img2" accept="image/png, image/jpeg"/>
        </div>
        <div class="2 mt-2 h-20 w-20 hover:h-24 hover:w-24" >
          <label for="imgInp2">
            <img id="image2" src="{{URL::asset('/images/camera.png')}}" alt="" class="rounded-md shadow-sm" className="h-20 w-20"/>
          </label>
        </div>
    </div>
  </div>
  
  <div class="columna2 grid-cols-1 -mt-1">
        
    <div class="image3">
      <div class="1 hidden  h-6 relative text-transparent">
          <input type="file"  id="imgInp3" name="img3" accept="image/png, image/jpeg"/>
      </div>
      <div class="2 mt-2 h-20 w-20 hover:h-24 hover:w-24" >
          <label for="imgInp3">
           <img id="image3" src="{{URL::asset('/images/camera.png')}}" alt=""class="rounded-md shadow-sm" className="h-20 w-20"/>
          </label>
      </div>
    </div>
  
    <div class="image4">
      <div class="1 hidden  h-6 relative text-transparent">
        <input type="file"  id="imgInp4" name="img4" accept="image/png, image/jpeg"/>
      </div>
      <div class="2 mt-2 h-20 w-20 hover:h-24 hover:w-24" >
        <label for="imgInp4">
          <img id="image4" src="{{URL::asset('/images/camera.png')}}" alt="" class="rounded-md shadow-sm" className="h-20 w-20"/>
        </label>
      </div>
  </div>
  </div>
  
  <div class="columna3 grid-cols-1 w-32 -mt-1">
        
    <div class="image5">
      <div class="1 hidden  h-6 relative text-transparent">
          <input type="file"  id="imgInp5" name="img5" accept="image/png, image/jpeg"/>
      </div>
      <div class="2 mt-2 h-28 w-28 hover:h-36 hover:w-36" >
          <label for="imgInp5">
           <img id="image5" src="{{URL::asset('/images/camera.png')}}" alt="" class="rounded-md shadow-sm" className="h-32 w-32"/>
          </label>
      </div>
    </div>
      
  </div>
  </div>
  
    </div>