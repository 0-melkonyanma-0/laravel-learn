<x-layout>
	<section class="px-6 py-8 mt-10 d-flex justify-content-center">
		<div class="border border-gray-200 bg-gray-100 p-4 rounded-xl w-96">
			<h1 class="text-center font-bold text-xl">
                {{ __('Register!') }}
			</h1>
			<main class="max-w-lg mx-auto">
				<form action="/register" method="POST" class="mt-10">
					@csrf
					<div class="mb-6">
						<label class="block mb-2 uppercase font-bold text-xs text-gray-700">
							{{ __('Name') }}
						</label>
						<input class="form-control"
							   type="text"
							   name="name"
							   id="name"
							   value="{{ old('name') }}"
							   autofocus
							   required
						/>
						@error('name')
							<div class="mt-2 text-danger">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="mb-6">
						<label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            {{ __('Username') }}
						</label>
						<input class="form-control"
							   type="text"
							   name="username"
							   id="username"
							   value="{{ old('username') }}"
							   autofocus
							   required
						/>
						@error('username')
							<div class="mt-2 text-danger">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="mb-6">
						<label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            {{ __('E-mail') }}
						</label>
						<input class="form-control"
							   type="email"
							   name="email"
							   id="email"
							   value="{{ old('email') }}"
							   autofocus
							   required
						/>
						@error('email')
							<div class="mt-2 text-danger">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="mb-6">
						<label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            {{ __('Password') }}
						</label>
						<input class="form-control"
							   type="password"
							   name="password"
							   id="password"
							   autofocus
							   required
						/>
						@error('password')
							<div class="mt-2 text-danger">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="mb-6">
						<input class="form-control"
							   type="submit"
							   value="{{ __('Create') }}"
						/>
					</div>
				</form>
			</main>
		</div>
	</section>
</x-layout>
