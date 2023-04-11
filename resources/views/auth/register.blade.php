<x-header title="Register"/>
<div class="w-screen h-screen flex justify-center items-center">
    <form method="POST" action="/register" class="bg-white shadow-md shadow-gray-400 rounded-md p-4 flex justify-center items-center flex-col">
        @csrf
        <p class="flex justify-center items-center gap-3">
            <i class="fa-solid fa-compact-disc text-black text-[40px]"></i><span
                class="text-black font-bold text-xl">Register</span>
        </p>
        <div class="flex flex-col items-start justify-center mt-3">
            <label for="username">Username</label>
            <input type="text" value="{{old('username')}}" name="username" id="username" class="border-[3px] border-black p-3 rounded-md"/>
            @error('username')
                <p class="text-[10px] text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="flex flex-col items-start justify-center mt-3">
            <label for="email">email</label>
            <input type="email" value="{{old('email')}}" name="email" id="email" class="border-[3px] border-black p-3 rounded-md"/>
            @error('email')
                <p class="text-[10px] text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="flex flex-col items-start justify-center mt-3">
            <label for="password">Password</label>
            <input type="password" value="{{old('password')}}" name="password" id="password" class="border-[3px] border-black p-3 rounded-md"/>
            @error('password')
                <p class="text-[10px] text-red-500">{{$message}}</p>
            @enderror
        </div>
        <button class="p-3 rounded-md border-black border-2 mt-4">Register</button>
    </form>
</div>
<x-footer />