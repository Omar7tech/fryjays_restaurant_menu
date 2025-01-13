<div class="p-6 max-w-xl mx-auto bg-base-200 rounded-lg shadow-md">
    @if (session()->has('message'))
        <div class="alert alert-success mb-4">
            <span>{{ session('message') }}</span>
        </div>
    @endif

    <form wire:submit.prevent="updateAccount">
        <!-- Username -->
        <div class="mb-4">
            <label for="username" class="block text-lg font-semibold">Username</label>
            <input wire:model="username" id="username" type="text" class="input input-bordered w-full" />
            @error('username') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Current Password -->
        <div class="mb-4">
            <label for="password" class="block text-lg font-semibold">Current Password</label>
            <input wire:model="password" id="password" type="password" class="input input-bordered w-full" />
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- New Password -->
        <div class="mb-4">
            <label for="new_password" class="block text-lg font-semibold">New Password</label>
            <input wire:model="new_password" id="new_password" type="password" class="input input-bordered w-full" />
            @error('new_password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Confirm New Password -->
        <div class="mb-4">
            <label for="new_password_confirmation" class="block text-lg font-semibold">Confirm New Password</label>
            <input wire:model="new_password_confirmation" id="new_password_confirmation" type="password" class="input input-bordered w-full" />
        </div>

        <button type="submit" class="btn btn-primary w-full mt-4">Update Account</button>
    </form>
</div>
