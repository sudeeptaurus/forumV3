import Login from "./pages/login";
import Register from "./pages/register";
import Categories from "./pages/categories";

const routes = [
  {
    path: "/login",
    component: Login,
    name: "login",
  },

  {
    path: "/register",
    component: Register,
    name: "register",
  },

  {
    path: "/",
    component: Categories,
    name: "categories",
  },
];

export default routes;
