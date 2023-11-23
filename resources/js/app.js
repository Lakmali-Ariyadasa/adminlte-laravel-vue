// Views
import Navbar from "./components/global/Navbar";
import Footer from "./components/global/Footer";
import Sidebar from "./components/global/Sidebar";
import Container from "./components/Container";
import Login from "./components/auth/Login";
import Register from "./components/auth/Register";
import PasswordReset from "./components/auth/PasswordReset";
import PasswordUpdate from "./components/auth/PasswordUpdate";
import BarChart from "./components/charts/BarChart.vue";
import PieChart from "./components/charts/PieChart.vue";
import BubbleChart from "./components/charts/BubbleChart.vue";
import ColorBubbleChart from "./components/charts/ColorBubbleChart.vue";
import ProfileProjectView from "./components/profile/ProfileProjectView.vue";
import Approvals from "./components/approvals/ProjectApprovals.vue";


require("./bootstrap");

window.Vue = require("vue").default;

const app = new Vue({
    el: "#app",
    components: {
        Container,
        Navbar,
        Sidebar,
        Footer,
        Login,
        Register,
        PasswordReset,
        PasswordUpdate,
        BarChart,
        PieChart,
        BubbleChart,
        ColorBubbleChart,
        ProfileProjectView,
        Approvals,
    }
});

