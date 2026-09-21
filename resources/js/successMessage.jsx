import { useEffect } from 'react';

function SuccessMessage({ message, onClose }) {
    useEffect(() => {
        if (!message) {
            return;
        }

        const timer = setTimeout(() => {
            onClose();
        }, 3000);

        return () => clearTimeout(timer);
    }, [message, onClose]);

    if (!message) {
        return null;
    }

    return (
        <div
            className="
                fixed
                top-24
                right-6
                z-50
                bg-green
                text-white
                px-6
                py-4
                rounded-xl
                shadow-lg
                flex
                items-center
                gap-3
                transition-all
                duration-300
            "
        >
            <span className="font-bold text-xl">
                ✓
            </span>

            <p className="font-bold">
                {message}
            </p>
        </div>
    );
}

export default SuccessMessage;
