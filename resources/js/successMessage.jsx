import { useEffect } from 'react';
import { createPortal } from 'react-dom';
import { X } from 'lucide-react';

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

    return createPortal(
        <div
            className="
                fixed
                top-24
                right-0
                z-9999
                bg-green
                text-white
                px-6
                py-4
                rounded-xl
                shadow-xl
                flex
                items-center
                gap-3
                max-w-sm
            "
        >
            <span className="font-bold text-xl">
                ✓
            </span>

            <p className="font-bold">
                {message}
            </p>

            <button
                type="button"
                onClick={onClose}
                className="text-white/80 hover:text-white text-xl font-bold"
                aria-label="Melding sluiten"
            >
                <X size={20} />
            </button>
        </div>,
        document.body
    );
}

export default SuccessMessage;
