import { BrowserRouter, Route, Routes } from "react-router-dom";

import Home from "./pages/Home";
import RoutingTest from "./pages/RoutingTest";

export default function App() {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/test-routing" element={<RoutingTest />} />
            </Routes>
        </BrowserRouter>
    );
}
