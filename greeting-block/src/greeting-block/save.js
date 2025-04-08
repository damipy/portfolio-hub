import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
    const blockProps = useBlockProps.save();

    return (
        <div {...blockProps}>
            <p className="greeting-text" data-name={attributes.name}>Hello, {attributes.name}!</p>
        </div>
    );
}