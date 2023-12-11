@extends('user.profile')


@section('container')

            <div class="tab-pane" id="edit">



                <div class="d-flex flex-column gap-1rem">

                    <form action="{{ route('update-username') }}" method="post"class="d-flex flex-column gap-1rem">
                        @csrf
                        <h3>Edit Profile</h3>
                        @if (session('success'))
                            <div>{{ session('success') }}</div>
                        @endif
                        <label for="username">New Username:</label>
                        <input class="popo" type="text" name="username" required>
                        @error('username')
                            <div>{{ $message }}</div>
                        @enderror

                        <label for="username">New Password:</label>
                        <input class="popo" type="password" name="password" required>
                        @error('username')
                            <div>{{ $message }}</div>
                        @enderror

                        <div class="row gap-1 ms-1 mt-3">
                            <button class="btn btn-primary  popop mt-3 " type="submit">Update</button>
                            <input type="reset" class="btn btn-secondary popop mt-3" value="Cancel">
                        </div>
                    </form>



                </div>
            </div>







@endsection
