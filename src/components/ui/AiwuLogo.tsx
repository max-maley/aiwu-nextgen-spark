interface AiwuLogoProps {
  className?: string;
  size?: "sm" | "md" | "lg";
}

const AiwuLogo = ({ className = "", size = "md" }: AiwuLogoProps) => {
  const sizes = {
    sm: { height: 28, pillWidth: 8, gap: 3 },
    md: { height: 40, pillWidth: 12, gap: 4 },
    lg: { height: 56, pillWidth: 16, gap: 5 },
  };

  const { height, pillWidth, gap } = sizes[size];
  const pillRadius = pillWidth / 2;

  return (
    <svg 
      viewBox="0 0 44 56" 
      fill="none" 
      xmlns="http://www.w3.org/2000/svg"
      style={{ height, width: height * (44/56) }}
      className={className}
    >
      {/* Left pill - Teal (shorter, bottom aligned) */}
      <rect 
        x="0" 
        y="24" 
        width="12" 
        height="32" 
        rx="6" 
        fill="#20808d"
      />
      {/* Middle pill - Coral/Orange (tallest, full height) */}
      <rect 
        x="16" 
        y="0" 
        width="12" 
        height="56" 
        rx="6" 
        fill="#FF5C35"
      />
      {/* Right pill - Orange (medium, bottom aligned) */}
      <rect 
        x="32" 
        y="12" 
        width="12" 
        height="44" 
        rx="6" 
        fill="#f59e0b"
      />
    </svg>
  );
};

export default AiwuLogo;
