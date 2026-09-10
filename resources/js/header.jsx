function Header() {
    return <header className="flex flex-row items-center justify-between bg-brown px-10">
        <p className="text-cream font-bold text-lg p-4">Paws of Joy</p>
        <nav className="flex gap-4 text-cream font-bold text-lg items-center p-4">
            <a href="/" className="nav-link">Home</a>
            <a href="/about" className="nav-link">Wie ben ik</a>
            <a href="/tarifs" className="nav-link">Tarieven</a>
            <a href="/diensten" className="nav-link">Diensten</a>
            <a href="/tracking" className="nav-link">Speurhonden</a>
            <a href="/contact" className="nav-link">Contact</a>
        </nav>
    </header>;
}

export default Header;
