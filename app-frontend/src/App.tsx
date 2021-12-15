/*!
=========================================================
* Muse Ant Design Dashboard - v1.0.0
=========================================================
* Product Page: https://www.creative-tim.com/product/muse-ant-design-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/muse-ant-design-dashboard/blob/main/LICENSE.md)
* Coded by Creative Tim
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*/
import Home from "./views/Home";
import Tables from "./views/Tables";
import Billing from "./views/Billing";
import Rtl from "./views/Rtl";
import Profile from "./views/Profile";
import SignUp from "./views/SignUp";
import SignIn from "./views/SignIn";
import Main from "./components/layout/Main";
import "./assets/styles/main.css";
import "./assets/styles/responsive.css";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";

function App() {
  return (
    <div className="App">
      <Router>
        <Routes>
          <Route path="/sign-up" element={<SignUp />} />
          <Route path="/sign-in" element={<SignIn />} />
          {/* <Main> */}
            {" "}
            <Route path="/dashboard" element={<Main />} />
            <Route path="/tables" element={<Tables />} />
            <Route path="/billing" element={<Billing />} />
            <Route path="/rtl" element={<Rtl />} />
            <Route path="/profile" element={<Profile />} />
          {/* </Main> */}

          {/* <Redirect from="*" to="/dashboard" />  */}
        </Routes>
      </Router>
    </div>
  );
}

export default App;
