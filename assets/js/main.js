// Language Switch Popover
const langSwitchPopover = document.getElementById("lang_switch");
const langSwitchContent = document.getElementById("lang_switch_content");

const popover = new bootstrap.Popover(langSwitchPopover, {
  html: true,
  content: langSwitchContent,
  trigger:'focus'
});

// Comment Swiper Script
const swiper = new Swiper(".comments_box", {
  navigation: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 5000,
  },
});
