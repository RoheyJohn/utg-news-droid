@extends('layouts.app')

@section('content')
<main class="flex-col bg-indigo-50 w-full ml-4 pr-6">
	<div class="flex justify-between mt-4 space-x-4 s">
		<a href="javascript:history.back()" class="bg-indigo-800 hover:bg-indigo-600 text-white font-bold py-5 px-6 rounded">
			Back
		</a>                 
	</div>

	<div class=" bg-indigo-50 flex justify-center items-center">
		<div class="lg:w-2/5 md:w-1/2 w-2/3">
			<form class="bg-white p-10 rounded-lg shadow-lg min-w-full">
				<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Create Association</h1>
				<div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="username">Name</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" id="username" placeholder="username" />
				</div>

				<div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="email">School</label>
					<select name="" id="" class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none">
						<option value="">Schools</option>
						<option value="">School of Law</option>
						<option value="">School of SAS</option>
					</select>
				</div>
				<div class="flex justify-between">
					<button type="submit" class="w-full mt-6 bg-gray-700 rounded-lg px-4 py-2 mr-5 text-lg text-white tracking-wide font-semibold font-sans">Reset</button>
					<button type="submit" class="w-full mt-6 bg-indigo-800 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Submit</button>
				</div>
				
			</form>
		</div>
	</div>
</main>

@endsection