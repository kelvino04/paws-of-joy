import { useState } from 'react';
import { Menu, X } from 'lucide-react';

function Header() {
    const [menuOpen, setMenuOpen] = useState(false);
    return (
        <header className="flex flex-row items-center justify-between bg-green px-4 md:px-20 py-2 relative">
            <div className="flex flex-row items-center gap-4">
                <img src="/images/pojLogo.png" alt="Logo" className="h-16 md:h-24 w-auto" />
                <h1 className="text-lg font-bold text-black italic md:text-2xl">Hondenuitlaatservice</h1>
            </div>
            <button
                className="md:hidden"
                onClick={() => setMenuOpen(!menuOpen)}
            >
                {menuOpen ? <X size={24} /> : <Menu size={24} />}
            </button>
            <nav className="gap-4 text-black font-bold text-lg items-center p-4 hidden md:flex">
                <a href="/" className="nav-link">Home</a>
                <a href="/about" className="nav-link">Wie ben ik</a>
                <a href="/tarifs" className="nav-link">Tarieven</a>
                <a href="/trackingLessons" className="nav-link">Speurlessen</a>
                <a href="/tracking" className="nav-link">Speurhonden</a>
                <a href="/contact" className="nav-link">Contact</a>
            </nav>
            {menuOpen && (
                <nav className="md:hidden flex flex-col items-center gap-4 py-4 absolute top-full left-0 w-full bg-green z-10">
                    <a href="/" className="nav-link">Home</a>
                    <a href="/about" className="nav-link">Wie ben ik</a>
                    <a href="/tarifs" className="nav-link">Tarieven</a>
                    <a href="/trackingLessons" className="nav-link">Speurlessen</a>
                    <a href="/tracking" className="nav-link">Speurhonden</a>
                    <a href="/contact" className="nav-link">Contact</a>
                </nav>
            )}
        </header>
    );
}

export default Header;
