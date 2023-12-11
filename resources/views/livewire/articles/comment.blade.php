<div>
    <h4 class="total">({{ $total_comments }}) Comments</h4>


    {{--  submit disini  --}}
    @auth

        <div class="mt-7 mb-5 tulis">



            <form wire:submit.prevent="store" class="mb-4">
                <div class="mb-3">
                    <textarea wire:model.defer="body" rows="2" class="form-control @error('body') is-infalid @enderror"
                        placeholder="Tulis komentar.."></textarea>

                    @error('body')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn site-btn">Submit</button>
                </div>

            </form>
        </div>
    @endauth


    @guest
        <div class="alert alert-danger" role="alert">
            Login dulu untuk berkomentar! <a href="{{ route('login') }}"> Klik Disini</a>
        </div>
    @endguest
    @foreach ($comments as $item)
        <div class="mb-3" id="comment-{{ $item->id }}">

            <div class="">
                {{--  <h4>3 Comments</h4>  --}}
                <div class="blog__details__comment__item mb-5 me-2 mt-3">
                    <div class="blog__details__comment__item__pic">
                        <img src="storage/images/user.png" alt="">
                    </div>
                    <div class="blog__details__comment__item__text minz blog__details__comment">
                        <span>{{ $item->created_at }}</span>
                        <h5> {{ $item->user->name }}</h5>
                        <p> {{ $item->body }}</p>


                        {{--  <a href="#">Like</a>
                <a href="#">Reply</a>  --}}

                        @auth
                            <a href="#" wire:click="selectReply({{ $item->id }})">
                                Reply
                            </a>

                            @if ($item->user_id == Auth::user()->id)
                                <button class="bert btn ikon-kanane" wire:click="selectEdit({{ $item->id }})"> <a
                                        href="#">edit</a></button>
                        <div class="ikon-kanan">
                             <button class="btn button ikon-kanane" wire:click="delete({{ $item->id }})">  <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg></button>


                            @endif


                            @if (isset($item->hasLike))

                            <button class="button-like">
                                <a wire:click="like({{ $item->id }})" class="">
                                    <i class="bi bi-heart-fill me-2 t n"></i>({{ $item->totalLike() }})</a>
                            </button>

                            @else
                            <button class="button-like">

                                <a wire:click="like({{ $item->id }})" class="">
                                    <i class="bi bi-heart me-2 t"></i>({{ $item->totalLike() }})</a>
                            </button>
                            @endif

                        </div>


                        @endauth
                    </div>
                    {{--  reply disini  --}}
                    @if (isset($comment_id) && $comment_id == $item->id)
                        <div>

                            <form wire:submit.prevent="reply" class="my-3">
                                <div class="mb-3">
                                    <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-infalid @enderror"
                                        placeholder="Tulis komentar..."></textarea>

                                    @error('body2')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button wire:click="like({{ $item->id }})" type="submit"
                                        class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                        @endif

                       @if (isset($edit_comment_id) && $edit_comment_id == $item->id)
                        <div>

                            <form wire:submit.prevent="change" class="my-3">
                                <div class="mb-3">
                                    <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-infalid @enderror"
                                        placeholder="Tulis komentar..."></textarea>

                                    @error('body2')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>

                            </form>
                        </div>
                    @endif
                </div>





                {{--  hasil reply disini  --}}
                <div class="ch">
                    @if ($item->childrens)
                        @foreach ($item->childrens as $item2)
                            <div class="d-flex align-item-star ms-4">
                                <div class="userss ml-3">
                                    <img src="https://th.bing.com/th/id/OIP.oHkFJ83WJhRou4l_Lj5CcQHaHa?w=585&h=585&rs=1&pid=ImgDetMain"
                                        class="img-fluid rounded-circle me-3 mb-4" width="50" alt="">
                                </div>

                                <div class="ml-3 wht">
                                    <div>
                                        <span> {{ $item2->user->name }}</span>
                                        <span>{{ $item2->created_at }}</span>
                                    </div>
                                    <div class="text-secondary mb-2 wht">
                                        {{ $item2->body }}
                                    </div>
                                    <div class="blog__details__comment__item__text">
                                        @auth
                                            {{--  <a href="#" wire:click="selectReply({{ $item2->id }})">
                                                Reply
                                            </a>  --}}

                                            @if ($item2->user_id == Auth::user()->id)

                                                        <div class="ikon-kanan2">
                                                            <button class="btn button" wire:click="delete({{ $item2->id }})">  <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg></button>


                                                           @endif
                                                           @if (isset($item2->hasLike))
                                                           <button class="button-like">
                                                               <a wire:click="like({{ $item2->id }})" class="">
                                                                   <i class="bi bi-heart-fill me-2 t n"></i>({{ $item2->totalLike() }})</a>
                                                           </button>

                                                           @else
                                                           <button class="button-like">

                                                               <a wire:click="like({{ $item2->id }})" class="">
                                                                   <i class="bi bi-heart me-2 t"></i>({{ $item2->totalLike() }})</a>
                                                           </button>
                                                           @endif
                                                       </div>

                                        @endauth

                                    </div>


                                    {{--  reply2  --}}


                                    {{--  @if (isset($comment_id) && $comment_id == $item->id)
                                        <div>

                                            <form wire:submit.prevent="reply" class="my-3">
                                                <div class="mb-3">
                                                    <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-infalid @enderror"
                                                        placeholder="Tulis komentar..."></textarea>

                                                    @error('body2')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="d-grid">
                                                    <button wire:click="like({{ $item->id }})" type="submit"
                                                        class="btn btn-primary">Submit</button>
                                                </div>

                                            </form>
                                        </div>
                                    @endif

                                    @if (isset($edit_comment_id) && $edit_comment_id == $item->id)
                                        <div>

                                            <form wire:submit.prevent="change" class="my-3">
                                                <div class="mb-3">
                                                    <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-infalid @enderror"
                                                        placeholder="Tulis komentar..."></textarea>

                                                    @error('body2')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-warning">Update</button>
                                                </div>

                                            </form>
                                        </div>
                                    @endif  --}}



                                </div>

                            </div>
                        @endforeach
                    @endif

                </div>
            </div>




            {{--    --}}
            {{--
        <div class="mb-3" id="comment-{{ $item->id }}">
            <div class="d-flex align-item-star mb-3">

                <div class="userss">
                    <img src="https://th.bing.com/th/id/OIP.oHkFJ83WJhRou4l_Lj5CcQHaHa?w=585&h=585&rs=1&pid=ImgDetMain"
                        class="img-fluid rounded-circle me-3 mb-4" width="50" alt="">
                </div>

                <div>
                    <div>

                        <span> {{ $item->user->name }}</span>
                        <span>{{ $item->created_at }}</span>
                    </div>
                    <div class="text-secondary">
                        {{ $item->body }}
                    </div>


                    <div>
                        @auth
                            <button class="btn btn-sm btn-primary"
                                wire:click="selectReply({{ $item->id }})">Balas</button>
                            @if ($item->user_id == Auth::user()->id)
                                <button class="btn btn-sm btn-warning"
                                    wire:click="selectEdit({{ $item->id }})">Edit</button>
                                <button class="btn btn-sm btn-danger"
                                    wire:click="delete({{ $item->id }})">Hapus</button>
                            @endif
                            @if (isset($item->hasLike))
                                <button wire:click="like({{ $item->id }})" class="btn btn-sm btn-danger">
                                    <i class="bi bi-heart-fill me-2"></i>({{ $item->totalLike() }})</button>
                            @else
                                <button wire:click="like({{ $item->id }})" class="btn btn-sm btn-dark">
                                    <i class="bi bi-heart-fill me-2"></i>({{ $item->totalLike() }})</button>
                            @endif

                        @endauth

                    </div>

                    @if (isset($comment_id) && $comment_id == $item->id)
                        <div>

                            <form wire:submit.prevent="reply" class="my-3">
                                <div class="mb-3">
                                    <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-infalid @enderror"
                                        placeholder="Tulis komentar..."></textarea>

                                    @error('body2')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button wire:click="like({{ $item->id }})" type="submit"
                                        class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    @endif

                    @if (isset($edit_comment_id) && $edit_comment_id == $item->id)
                        <div>

                            <form wire:submit.prevent="change" class="my-3">
                                <div class="mb-3">
                                    <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-infalid @enderror"
                                        placeholder="Tulis komentar..."></textarea>

                                    @error('body2')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>

                            </form>
                        </div>
                    @endif


                </div>
            </div>
        </div>  --}}




            {{--  @forelse ($products as $productIndex => $productItem)
        <div class="card" wire:key="products-{{ $productIndex }}">

        </div>
    @empty
        No Products
    @endforelse  --}}
    @endforeach
</div>

</div>
