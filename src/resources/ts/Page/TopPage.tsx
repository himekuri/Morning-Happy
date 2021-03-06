import React from "react";
import Layout from "../Layouts/Layout";
import Top from "../component/Top";
import Proverb from "../component/Proverb";
import Fortune from "../component/Fortune";
import { Link } from "react-router-dom";
import Card from "../parts/Card";

const TopPage = () => {
    return (
        <>
            <Layout>
                <div className="grid grid-cols-2 gap-6 pt-36">
                    <Top />
                    <Proverb />
                    <Fortune />
                    <Link to="/todos">
                        <Card text={"todoリスト"} img={"salad.png"} />
                    </Link>
                </div>
            </Layout>
        </>
    );
};

export default TopPage;
