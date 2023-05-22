@extends('web.layouts.master')
@section('content')
    <div class="col-lg-6">
        <div class="central-meta new-pst">
            <div class="new-postbox">
                <figure>
                    <img src="{{ Auth::user()->image == null ? asset('assets/images/profile/male-icon.jpg') : asset('storage/' . Auth::user()->image) }}"
                        alt="">
                </figure>
                <div class="newpst-input">
                    <form method="post">
                        <textarea rows="2" placeholder="write something"></textarea>
                        <div class="attachments">
                            <ul>
                                <li>
                                    <i class="fa fa-music"></i>
                                    <label class="fileContainer">
                                        <input type="file">
                                    </label>
                                </li>
                                <li>
                                    <i class="fa fa-image"></i>
                                    <label class="fileContainer">
                                        <input type="file">
                                    </label>
                                </li>
                                <li>
                                    <i class="fa fa-video-camera"></i>
                                    <label class="fileContainer">
                                        <input type="file">
                                    </label>
                                </li>
                                <li>
                                    <i class="fa fa-camera"></i>
                                    <label class="fileContainer">
                                        <input type="file">
                                    </label>
                                </li>
                                <li>
                                    <button type="submit">Post</button>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- add post new box -->
        <div class="loadMore">
            <div class="central-meta item">
                <div class="user-post">
                    <div class="friend-info">
                        <figure>
                            <img src="{{ asset('assets/images/resources/friend-avatar10.jpg') }}" alt="">
                        </figure>
                        <div class="friend-name">
                            <ins><a href="time-line.html" title="">Janice
                                    Griffith</a></ins>
                            <span>published: june,2 2018 19:PM</span>
                        </div>
                        <div class="post-meta">
                            <img src="{{ asset('assets/images/resources/user-post.jpg') }}" alt="">
                            <div class="we-video-info">
                                <ul>
                                    <li>
                                        <span class="views" data-toggle="tooltip" title="views">
                                            <i class="fa fa-eye"></i>
                                            <ins>1.2k</ins>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="comment" data-toggle="tooltip" title="Comments">
                                            <i class="fa fa-comments-o"></i>
                                            <ins>52</ins>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="like" data-toggle="tooltip" title="like">
                                            <i class="ti-heart"></i>
                                            <ins>2.2k</ins>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="dislike" data-toggle="tooltip" title="dislike">
                                            <i class="ti-heart-broken"></i>
                                            <ins>200</ins>
                                        </span>
                                    </li>
                                    <li class="social-media">
                                        <div class="menu">
                                            <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                            <div class="rotater">
                                                <div class="btn btn-icon"><a href="#" title=""><i
                                                            class="fa fa-html5"></i></a>
                                                </div>
                                            </div>
                                            <div class="rotater">
                                                <div class="btn btn-icon"><a href="#" title=""><i
                                                            class="fa fa-facebook"></i></a>
                                                </div>
                                            </div>
                                            <div class="rotater">
                                                <div class="btn btn-icon"><a href="#" title=""><i
                                                            class="fa fa-google-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="rotater">
                                                <div class="btn btn-icon"><a href="#" title=""><i
                                                            class="fa fa-twitter"></i></a>
                                                </div>
                                            </div>
                                            <div class="rotater">
                                                <div class="btn btn-icon"><a href="#" title=""><i
                                                            class="fa fa-css3"></i></a>
                                                </div>
                                            </div>
                                            <div class="rotater">
                                                <div class="btn btn-icon"><a href="#" title=""><i
                                                            class="fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="rotater">
                                                <div class="btn btn-icon"><a href="#" title=""><i
                                                            class="fa fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                            <div class="rotater">
                                                <div class="btn btn-icon"><a href="#" title=""><i
                                                            class="fa fa-pinterest"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="description">

                                <p>
                                    World's most beautiful car in Curabitur <a href="#" title="">#test drive
                                        booking
                                        !</a> the most beatuiful car available in america
                                    and the saudia arabia, you can book your test drive by
                                    our official website
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="coment-area">
                        <ul class="we-comet">
                            <li>
                                <div class="comet-avatar">
                                    <img src="{{ asset('assets/images/resources/comet-1.jpg') }}" alt="">
                                </div>
                                <div class="we-comment">
                                    <div class="coment-head">
                                        <h5><a href="time-line.html" title="">Jason
                                                borne</a></h5>
                                        <span>1 year ago</span>
                                        <a class="we-reply" href="#" title="Reply"><i
                                                class="fa fa-reply"></i></a>
                                    </div>
                                    <p>we are working for the dance and sing songs. this car
                                        is very awesome for the youngster. please vote this
                                        car and like our post</p>
                                </div>
                                <ul>
                                    <li>
                                        <div class="comet-avatar">
                                            <img src="{{ asset('assets/images/resources/comet-2.jpg') }}" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <div class="coment-head">
                                                <h5><a href="time-line.html" title="">alexendra dadrio</a>
                                                </h5>
                                                <span>1 month ago</span>
                                                <a class="we-reply" href="#" title="Reply"><i
                                                        class="fa fa-reply"></i></a>
                                            </div>
                                            <p>yes, really very awesome car i see the
                                                features of this car in the official website
                                                of <a href="#" title="">#Mercedes-Benz</a> and
                                                really impressed :-)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comet-avatar">
                                            <img src="{{ asset('assets/images/resources/comet-3.jpg') }}" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <div class="coment-head">
                                                <h5><a href="time-line.html" title="">Olivia</a></h5>
                                                <span>16 days ago</span>
                                                <a class="we-reply" href="#" title="Reply"><i
                                                        class="fa fa-reply"></i></a>
                                            </div>
                                            <p>i like lexus cars, lexus cars are most
                                                beautiful with the awesome features, but
                                                this car is really outstanding than lexus
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comet-avatar">
                                    <img src="{{ asset('assets/images/resources/comet-1.jpg') }}" alt="">
                                </div>
                                <div class="we-comment">
                                    <div class="coment-head">
                                        <h5><a href="time-line.html" title="">Donald
                                                Trump</a></h5>
                                        <span>1 week ago</span>
                                        <a class="we-reply" href="#" title="Reply"><i
                                                class="fa fa-reply"></i></a>
                                    </div>
                                    <p>we are working for the dance and sing songs. this
                                        video is very awesome for the youngster. please vote
                                        this video and like our channel
                                        <i class="em em-smiley"></i>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" title="" class="showmore underline">more comments</a>
                            </li>
                            <li class="post-comment">
                                <div class="comet-avatar">
                                    <img src="{{ asset('assets/images/resources/comet-1.jpg') }}" alt="">
                                </div>
                                <div class="post-comt-box">
                                    <form method="post">
                                        <textarea placeholder="Post your comment"></textarea>
                                        <div class="add-smiles">
                                            <span class="em em-expressionless" title="add icon"></span>
                                        </div>
                                        <div class="smiles-bunch">
                                            <i class="em em---1"></i>
                                            <i class="em em-smiley"></i>
                                            <i class="em em-anguished"></i>
                                            <i class="em em-laughing"></i>
                                            <i class="em em-angry"></i>
                                            <i class="em em-astonished"></i>
                                            <i class="em em-blush"></i>
                                            <i class="em em-disappointed"></i>
                                            <i class="em em-worried"></i>
                                            <i class="em em-kissing_heart"></i>
                                            <i class="em em-rage"></i>
                                            <i class="em em-stuck_out_tongue"></i>
                                        </div>
                                        <button type="submit"></button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- centerl meta -->
@endsection
