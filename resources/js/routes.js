import Login from "./pages/login";
import Register from "./pages/register";
import Categories from "./pages/categories";
import Forum from "./pages/forum";

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
    path: "/forum/:id",
    component: Forum,
    name: "forum",
  },

  {
    path: "/",
    component: Categories,
    name: "categories",
  },
];

export default routes;
