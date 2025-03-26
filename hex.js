function generate() {
    const genRanHex = () => {
        return [...Array(6)].map(() => Math.floor(Math.random() * 16).toString(16)).join('');
    };
    return genRanHex();
}