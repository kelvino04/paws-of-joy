import { useEffect, useState } from "react";
import { ArrowUp } from "lucide-react";

export default function ScrollToTop() {
    const [showButton, setShowButton] = useState(false);

    useEffect(() => {
        const handleScroll = () => {
            setShowButton(window.scrollY > 300);
        };

        window.addEventListener("scroll", handleScroll);

        return () => {
            window.removeEventListener("scroll", handleScroll);
        };
    }, []);

    const scrollToTop = () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    };

    return (
        <button
            onClick={scrollToTop}
            aria-label="Scroll naar boven"
            className={`
                fixed bottom-6 right-6 z-50
                flex h-12 w-12 items-center justify-center
                rounded-full
                bg-brown text-white
                shadow-lg
                transition-all duration-300
                hover:-translate-y-1
                hover:bg-yellow hover:text-black
                ${showButton
                    ? "translate-y-0 opacity-100"
                    : "pointer-events-none translate-y-4 opacity-0"
                }
            `}
        >
            <ArrowUp size={22} strokeWidth={2.5} />
        </button>
    );
}
