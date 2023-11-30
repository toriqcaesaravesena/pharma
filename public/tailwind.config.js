/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../app/view/**/*.php"],
  theme: {
    extend: {
      backgroundImage: {
        bg_main: "url('./asset/Background.svg')",
        bg_cta: "url('./asset/cta.svg')",
        bg_service: "url('./asset/services/banner.svg')",
        bg_bot: "url('./asset/services/bot-service.svg')",
        bg_blog: "url('./asset/blog/bg2.svg')",
        bg_team: "url('./asset/team/Team.svg')",
        bg_Contact: "url('./asset/contactUs.svg')",
        bg_login: "url('./asset/Banner.jpg')"
      },
      fontFamily: {
        Inter: "'Inter', sans-serif",
        Lato: "'Lato', sans-serif",
        Montserrat: "'Montserrat', sans-serif",
      },
      colors: {
        primary: "#0152A8",
        green: "#0fe3af",
        greyy: "#F1F1F1",
      },
      textColor: {
        header1: "#143450",
        header2: "#1C1C1C",
      },
    },
  },
  plugins: [],
};