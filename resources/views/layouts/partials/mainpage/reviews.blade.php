<div class="bg-grey-60" id="categories">
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-36">

    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      Отзывы
    </h2>
    <p class="text-base md:text-lg subtitle--bg">
      <span>маленькие истории из жизни клиентов</span>
    </p>
  </div>



    <div class="grid gap-10 mx-auto sm:grid-cols-1 lg:grid-cols-3 lg:max-w-screen-lg">

      @for ($i=0; $i < 3; $i++)
        <div class="grid grid-cols-1 justify-items-center">
            <img class="object-cover w-36 h-36 rounded-full shadow" src="/img/rev.jpg" alt="Person" />
            <p class="text-lg font-bold mt-4">Оксана</p>
          <div class="flex flex-nowrap justify-center mt-4 py-4 w-full">
            @for ($s=0; $s < 5; $s++)
              <svg xmlns="http://www.w3.org/2000/svg" class="text-orange m-2" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
              </svg>
            @endfor

          </div>

          <div>
            <p class="text-sm tracking-wide text-black">
              Pommy ipsum bent as a nine bob note naff off biscuits nowt, a cuppa unhand me sir hadn't done it in donkey's years sod's law.
            </p>
          </div>
        </div>
      @endfor

    </div>

  </div>
</div>
