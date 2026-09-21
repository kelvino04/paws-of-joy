import { useState, useEffect } from 'react';
import { Menu, X } from 'lucide-react';

function Header() {
    const [menuOpen, setMenuOpen] = useState(false);
    const [isAdmin, setIsAdmin] = useState(false);

    useEffect(() => {
        fetch('/admin/status')
            .then(response => response.json())
            .then(data => {
                setIsAdmin(data.authenticated);
            })
            .catch(() => {
                setIsAdmin(false);
            });
    }, []);
    return (
        <header className="flex flex-row items-center justify-between bg-green px-4 lg:px-10 py-2 relative">
            <div className="flex flex-row items-center gap-4">
                <img src="/images/pojLogo.png" alt="Logo" className="h-16 md:h-24 w-auto" />
                <h1 className="text-lg font-bold text-black italic md:text-2xl">Hondenuitlaatservice</h1>
            </div>
            <button
                className="lg:hidden"
                onClick={() => setMenuOpen(!menuOpen)}
            >
                {menuOpen ? <X size={24} /> : <Menu size={24} />}
            </button>
            <nav className="gap-3 text-black font-bold text-base items-center p-2 hidden lg:flex">
                <a href="/" className="nav-link">Home</a>
                <a href="/about" className="nav-link">Wie ben ik</a>
                <a href="/tarifs" className="nav-link">Tarieven</a>
                <a href="/trackingLessons" className="nav-link">Speurlessen</a>
                <a href="/tracking" className="nav-link">Speurhonden</a>
                <a href="/contact" className="nav-link">Contact</a>
                {isAdmin && (
                    <a href="/admin" className="nav-link">
                        Admin paneel
                    </a>
                )}
                <a href="https://www.facebook.com/pawsofjoy" target="_blank" rel="noopener noreferrer" className="hover:text-yellow transition-colors flex flex-row items-center gap-2">
                    <img src="/images/2023_Facebook_icon.svg.webp" alt="Facebook" className="h-6 w-6" />
                </a>
            </nav>
            {menuOpen && (
                <nav className="lg:hidden flex flex-col items-center gap-4 py-4 absolute top-full left-0 w-full bg-green z-10">
                    <a href="/" className="nav-link">Home</a>
                    <a href="/about" className="nav-link">Wie ben ik</a>
                    <a href="/tarifs" className="nav-link">Tarieven</a>
                    <a href="/trackingLessons" className="nav-link">Speurlessen</a>
                    <a href="/tracking" className="nav-link">Speurhonden</a>
                    <a href="/contact" className="nav-link">Contact</a>
                    {isAdmin && (
                        <a href="/admin" className="nav-link">
                            Admin paneel
                        </a>
                    )}
                    <a href="https://www.facebook.com/pawsofjoy" target="_blank" rel="noopener noreferrer" className="hover:text-yellow transition-colors flex flex-row items-center gap-2">
                        <img src="/images/2023_Facebook_icon.svg.webp" alt="Facebook" className="h-6 w-6" />
                    </a>
                </nav>
            )}
        </header>
    );
}

export default Header;
