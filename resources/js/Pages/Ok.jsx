import AuthenticatedLayout from "../Layouts/AuthenticatedLayout";

const Ok = () => {
    return;
};
Ok.layout = (page) => {
    return <AuthenticatedLayout children={page} />;
};
export default Ok;
