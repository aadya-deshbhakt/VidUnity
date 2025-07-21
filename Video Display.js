var menuIcon = document.querySelector(".menu-icon");
var vidunity_logo = document.querySelector(".vidunity-logo");
var sidebar = document.querySelector(".sidebar");
var container = document.querySelector(".container");
var display_video = document.querySelector(".display_video");
var video_title = document.querySelector(".video-title");
var side_container = document.querySelector(".side-container");
var side_title = document.querySelector(".side-title");
var about_video = document.querySelector(".about-video");
var creator_name = document.querySelector(".creator-name");
var upload_date = document.querySelector(".upload-date");
var more_videos = document.querySelector(".more-videos");
var thumbnail1 = document.querySelector(".thumbnail1");
var thumbnail2 = document.querySelector(".thumbnail2");
var thank_you = document.querySelector(".thank-you");
var thank_you_text = document.querySelector(".thank-you-text");

menuIcon.onclick = function(){
    sidebar.classList.toggle("moving-sidebar");
    vidunity_logo.classList.toggle("moving-logo");
    container.classList.toggle("large-container");
    display_video.classList.toggle("large-video");
    video_title.classList.toggle("invisible-video-title");
    side_container.classList.toggle("moving-side-container");
    side_title.classList.toggle("customize-side-title");
    about_video.classList.toggle("customize-about-video");
    more_videos.classList.toggle("customize-more-videos");
    creator_name.classList.toggle("move-creator-name");
    upload_date.classList.toggle("move-upload-date");
    thumbnail1.classList.toggle("larger-thumbnail1");
    thumbnail2.classList.toggle("invisible-thumbnail2");
    thank_you.classList.toggle("visible-thank-you");
    thank_you_text.classList.toggle("move-thank-you-text");
}

var play_pause = document.querySelector(".play_pause");
var play_pause_button = document.querySelector(".play_pause_button");