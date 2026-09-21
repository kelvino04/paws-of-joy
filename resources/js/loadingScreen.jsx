import React from 'react';

function LoadingScreen() {
    return (
        <div
            id="loadingScreen"
            className="fixed inset-0 z-50 flex items-center justify-center bg-cream"
        >
            <div className="relative w-60 aspect-485/514">

                <img
                    src="/images/pojLogoNoPaws.png"
                    alt="Paws of joy"
                    className="absolute inset-0 w-full h-full object-contain"
                />

                <img
                    src="/images/pojLogoPaw1.png"
                    alt=""
                    className="absolute inset-0 w-full h-full object-contain paw paw-1"
                />

                <img
                    src="/images/pojLogoPaw2.png"
                    alt=""
                    className="absolute inset-0 w-full h-full object-contain paw paw-2"
                />

                <img
                    src="/images/pojLogoPaw3.png"
                    alt=""
                    className="absolute inset-0 w-full h-full object-contain paw paw-3"
                />

            </div>
        </div>
    );
}

export default LoadingScreen;
