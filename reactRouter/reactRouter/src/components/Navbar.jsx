import { Link } from "react-router-dom";

const Navbar = () => {
    return (
        <nav>
            <Link to="/">Home</Link>
            <Link to="/contato">Contato</Link>
        </nav>
    )
}

export default Navbar;