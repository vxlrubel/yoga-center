@extends('layouts.app')
@push('title', 'Profile | Yoga Center')

@push('style')
    <link rel="stylesheet" href="{{asset('/assets/css/profile.css')}}">
@endpush

@section('content')
<section class="page-top-section set-bg" data-setbg="assets/img/page-top-bg.jpg">
    <div class="container">
        <h2 class="p-0 m-0 fs-4 text-white fw-bold">Profiel Details</h2>
    </div>
</section>

<div class="clearfix">
    <div class="container-xxl py-4">
        <div class="profile-container">
            <div class="profile-left-sidebar">
                <div class="d-flex flex-wrap author-details border">
                    <div class="image">
                        <div>
                            <img src="https://img.freepik.com/free-photo/portrait-handsome-smiling-stylish-young-man-model-dressed-red-checkered-shirt-fashion-man-posing_158538-4914.jpg?t=st=1739992567~exp=1739996167~hmac=f8e8192d1a422fe81822bf702039f55680bf98a9d62aa1e46c8b850254c4276b&w=740" alt="">
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="p-3">
                            <h4 class="mb-1 text-capitalize fs-5 text-truncate border-bottom pb-1">John Doe</h4>
                            <span class="d-block mb-2">Yoga Enthusiast | Wellness Advocate</span>
                            <div class="small">
                                <div class="info-field">
                                    <span>Age</span>
                                    <span>: 28</span>
                                </div>
                                <div class="info-field">
                                    <span>username</span>
                                    <span>: johndoe</span>
                                </div>
                                <div class="info-field">
                                    <span>experience</span>
                                    <span>: 5 Years</span>
                                </div>
                                <div class="info-field">
                                    <span>enrolled</span>
                                    <span>: Energy Flow</span>
                                </div>
                            </div>
                            <hr>
                            <h3 class="fs-5 mb-2 pb-1 border-bottom">Social Media</h3>
                            <div class="d-flex gap-2 flex-wrap">
                                <a href="javascript:void(0)" class="social-icon">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="javascript:void(0)" class="social-icon">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="javascript:void(0)" class="social-icon">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="javascript:void(0)" class="social-icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="border-bottom border-2 d-block w-100 my-3 d-md-none"></div>
            <div class="profile-right-sidebar p-3 px-md-4 small">
                <h3 class="fs-5 text-capitalize mb-3 pb-1 border-bottom">About Me</h3>
                <div>
                    Hi, I'm John! I started practicing yoga five years ago, and it has transformed my life. I love exploring different yoga styles and helping others find balance and peace through mindful movement.
                </div>
                <hr>
                <h3 class="fs-5 text-capitalize mb-3 pb-1 border-bottom">Yoga Preferences & Level</h3>
                <div>
                    <ul class="m-0 pb-0 ps-4">
                        <li><span class="fw-bold">Experience Level: </span>Intermediate</li>
                        <li><span class="fw-bold">Preferred Styles: </span>Vinyasa, Hatha, and Yin Yoga</li>
                    </ul>
                </div>
                <hr>
                <h3 class="fs-5 text-capitalize mb-3 pb-1 border-bottom">Achievements & Badges</h3>
                <div>
                    <ul class="m-0 pb-0 ps-4">
                        <li><span class="fw-bold">30-Day Yoga Challenge Completed</li>
                        <li><span class="fw-bold">Certified in Hatha Yoga Basics</li>
                    </ul>
                </div>
                <hr>
                <h3 class="fs-5 text-capitalize mb-3 pb-1 border-bottom">Daily Practice Tracker</h3>
                <div>
                    <ul class="m-0 pb-0 ps-4">
                        <li><span class="fw-bold">Current Streak: </span>15 Days</li>
                        <li><span class="fw-bold">Sessions Completed This Month: </span>12</li>
                        <li><span class="fw-bold">Favorite Pose: </span>Downward Dog</li>
                    </ul>
                </div>
                <hr>
                <h3 class="fs-5 text-capitalize mb-3 pb-1 border-bottom">Saved or Enrolled Classes</h3>
                <div>
                    <ul class="m-0 pb-0 ps-4">
                        <li><span class="fw-bold">Morning Energy Flow - 20 min (Enrolled ✅)</span></li>
                    </ul>
                </div>
                <hr>
                <h3 class="fs-5 text-capitalize mb-3 pb-1 border-bottom">Settings & Preferences</h3>
                <div>
                    <ul class="m-0 pb-0 ps-4">
                        <li><span class="fw-bold">Profile Visibility: </span>Public</li>
                        <li><span class="fw-bold">Notification: </span>Enabled</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
